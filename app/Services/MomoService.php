<?php

namespace App\Services;

use App\Models\PaymentModel;
use App\Traits\MomoTrait;

class MomoService extends BaseService
{
    use MomoTrait;

    public function __construct(PaymentModel $paymentModel)
    {
        $this->model = $paymentModel;
    }

    public function createPayment($orderId, $total)
    {
        try {
            $partnerCode = MOMO_PARTNER_CODE;
            $accessKey = MOMO_ACCESS_KEY;
            $secretKey = MOMO_SECRET_KEY;
            $orderInfo = 'Thanh toán qua MoMo';
            $amount = $total;
            $orderId = $orderId . "";
            $returnUrl = route(RESULT_PAYMENT_MOMO);
            $notifyUrl = MOMO_NOTIFY_URL;
            $requestType = "payWithATM";
            $requestId = time() . "";
            $extraData = "";
            $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
            $partnerClientId = 'hungvumanh11o23@gmail.com';

            $rawHash = "accessKey=" . $accessKey .
                "&amount=" . $amount .
                "&extraData=" . $extraData .
                "&ipnUrl=" . $returnUrl .
                "&orderId=" . $orderId .
                "&orderInfo=" . $orderInfo .
                "&partnerClientId=" . $partnerClientId .
                "&partnerCode=" . $partnerCode .
                "&redirectUrl=" . $returnUrl .
                "&requestId=" . $requestId .
                "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);

            $data = array(
                'partnerCode' => $partnerCode,
                'accessKey' => $accessKey,
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $returnUrl,
                'ipnUrl' => $returnUrl,
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature,
                'partnerClientId' => $partnerClientId
            );

            //send api to momo
            $result = $this->execPostRequest($endpoint, json_encode($data));

            $jsonResult = json_decode($result, true);
//            dd($jsonResult);
            return $jsonResult['payUrl'];
        } catch (\Exception $e) {
            return route(STORE_CART);
        }
    }
}
