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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicDeviceStatus返回参数结构体
 *
 * @method array getData() 获取返回资源及状态，状态码：
1 - 封堵状态
2 - 正常状态
3 - 攻击状态
 * @method void setData(array $Data) 设置返回资源及状态，状态码：
1 - 封堵状态
2 - 正常状态
3 - 攻击状态
 * @method array getCLBData() 获取域名化资产的名称
 * @method void setCLBData(array $CLBData) 设置域名化资产的名称
 * @method array getCnameWafData() 获取cnamewaf资源状态
 * @method void setCnameWafData(array $CnameWafData) 设置cnamewaf资源状态
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBasicDeviceStatusResponse extends AbstractModel
{
    /**
     * @var array 返回资源及状态，状态码：
1 - 封堵状态
2 - 正常状态
3 - 攻击状态
     */
    public $Data;

    /**
     * @var array 域名化资产的名称
     */
    public $CLBData;

    /**
     * @var array cnamewaf资源状态
     */
    public $CnameWafData;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 返回资源及状态，状态码：
1 - 封堵状态
2 - 正常状态
3 - 攻击状态
     * @param array $CLBData 域名化资产的名称
     * @param array $CnameWafData cnamewaf资源状态
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("CLBData",$param) and $param["CLBData"] !== null) {
            $this->CLBData = [];
            foreach ($param["CLBData"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->CLBData, $obj);
            }
        }

        if (array_key_exists("CnameWafData",$param) and $param["CnameWafData"] !== null) {
            $this->CnameWafData = [];
            foreach ($param["CnameWafData"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->CnameWafData, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
