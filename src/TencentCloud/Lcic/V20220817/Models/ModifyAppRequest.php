<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApp请求参数结构体
 *
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。
 * @method string getCallback() 获取回调地址。
 * @method void setCallback(string $Callback) 设置回调地址。
 * @method string getCallbackKey() 获取回调key。
 * @method void setCallbackKey(string $CallbackKey) 设置回调key。
 * @method string getTransferId() 获取转存id
 * @method void setTransferId(string $TransferId) 设置转存id
 * @method string getTransferUrl() 获取转存地址
 * @method void setTransferUrl(string $TransferUrl) 设置转存地址
 */
class ModifyAppRequest extends AbstractModel
{
    /**
     * @var integer 低代码互动课堂的SdkAppId。
     */
    public $SdkAppId;

    /**
     * @var string 回调地址。
     */
    public $Callback;

    /**
     * @var string 回调key。
     */
    public $CallbackKey;

    /**
     * @var string 转存id
     */
    public $TransferId;

    /**
     * @var string 转存地址
     */
    public $TransferUrl;

    /**
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。
     * @param string $Callback 回调地址。
     * @param string $CallbackKey 回调key。
     * @param string $TransferId 转存id
     * @param string $TransferUrl 转存地址
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = $param["Callback"];
        }

        if (array_key_exists("CallbackKey",$param) and $param["CallbackKey"] !== null) {
            $this->CallbackKey = $param["CallbackKey"];
        }

        if (array_key_exists("TransferId",$param) and $param["TransferId"] !== null) {
            $this->TransferId = $param["TransferId"];
        }

        if (array_key_exists("TransferUrl",$param) and $param["TransferUrl"] !== null) {
            $this->TransferUrl = $param["TransferUrl"];
        }
    }
}
