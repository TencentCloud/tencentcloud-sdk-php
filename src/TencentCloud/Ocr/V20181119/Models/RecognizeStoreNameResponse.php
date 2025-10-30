<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * RecognizeStoreName返回参数结构体
 *
 * @method array getStoreInfo() 获取门头照名称
 * @method void setStoreInfo(array $StoreInfo) 设置门头照名称
 * @method float getAngle() 获取图片旋转角度（角度制），文本的水平方向为0°，顺时针为正，逆时针为负
 * @method void setAngle(float $Angle) 设置图片旋转角度（角度制），文本的水平方向为0°，顺时针为正，逆时针为负
 * @method array getStoreLabel() 获取门头照标签
 * @method void setStoreLabel(array $StoreLabel) 设置门头照标签
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeStoreNameResponse extends AbstractModel
{
    /**
     * @var array 门头照名称
     */
    public $StoreInfo;

    /**
     * @var float 图片旋转角度（角度制），文本的水平方向为0°，顺时针为正，逆时针为负
     */
    public $Angle;

    /**
     * @var array 门头照标签
     */
    public $StoreLabel;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $StoreInfo 门头照名称
     * @param float $Angle 图片旋转角度（角度制），文本的水平方向为0°，顺时针为正，逆时针为负
     * @param array $StoreLabel 门头照标签
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("StoreInfo",$param) and $param["StoreInfo"] !== null) {
            $this->StoreInfo = [];
            foreach ($param["StoreInfo"] as $key => $value){
                $obj = new StoreInfo();
                $obj->deserialize($value);
                array_push($this->StoreInfo, $obj);
            }
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("StoreLabel",$param) and $param["StoreLabel"] !== null) {
            $this->StoreLabel = $param["StoreLabel"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
