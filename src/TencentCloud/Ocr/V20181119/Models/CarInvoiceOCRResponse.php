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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getCarInvoiceInfos() 获取购车发票识别结果，具体内容请点击左侧链接。
 * @method void setCarInvoiceInfos(array $CarInvoiceInfos) 设置购车发票识别结果，具体内容请点击左侧链接。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *CarInvoiceOCR返回参数结构体
 */
class CarInvoiceOCRResponse extends AbstractModel
{
    /**
     * @var array 购车发票识别结果，具体内容请点击左侧链接。
     */
    public $CarInvoiceInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param array $CarInvoiceInfos 购车发票识别结果，具体内容请点击左侧链接。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CarInvoiceInfos",$param) and $param["CarInvoiceInfos"] !== null) {
            $this->CarInvoiceInfos = [];
            foreach ($param["CarInvoiceInfos"] as $key => $value){
                $obj = new CarInvoiceInfo();
                $obj->deserialize($value);
                array_push($this->CarInvoiceInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
