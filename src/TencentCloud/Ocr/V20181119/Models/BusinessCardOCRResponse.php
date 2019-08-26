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
 * @method array getBusinessCardInfos() 获取名片识别结果，具体内容请点击左侧链接。
 * @method void setBusinessCardInfos(array $BusinessCardInfos) 设置名片识别结果，具体内容请点击左侧链接。
 * @method string getRetImageBase64() 获取返回图像预处理后的图片，图像预处理未开启时返回内容为空。
 * @method void setRetImageBase64(string $RetImageBase64) 设置返回图像预处理后的图片，图像预处理未开启时返回内容为空。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *BusinessCardOCR返回参数结构体
 */
class BusinessCardOCRResponse extends AbstractModel
{
    /**
     * @var array 名片识别结果，具体内容请点击左侧链接。
     */
    public $BusinessCardInfos;

    /**
     * @var string 返回图像预处理后的图片，图像预处理未开启时返回内容为空。
     */
    public $RetImageBase64;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param array $BusinessCardInfos 名片识别结果，具体内容请点击左侧链接。
     * @param string $RetImageBase64 返回图像预处理后的图片，图像预处理未开启时返回内容为空。
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
        if (array_key_exists("BusinessCardInfos",$param) and $param["BusinessCardInfos"] !== null) {
            $this->BusinessCardInfos = [];
            foreach ($param["BusinessCardInfos"] as $key => $value){
                $obj = new BusinessCardInfo();
                $obj->deserialize($value);
                array_push($this->BusinessCardInfos, $obj);
            }
        }

        if (array_key_exists("RetImageBase64",$param) and $param["RetImageBase64"] !== null) {
            $this->RetImageBase64 = $param["RetImageBase64"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
