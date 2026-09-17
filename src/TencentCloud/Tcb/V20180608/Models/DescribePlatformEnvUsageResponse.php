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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlatformEnvUsage返回参数结构体
 *
 * @method array getResources() 获取<p>资源用量信息</p>
 * @method void setResources(array $Resources) 设置<p>资源用量信息</p>
 * @method integer getTotalCredits() 获取<p>资源点</p>
 * @method void setTotalCredits(integer $TotalCredits) 设置<p>资源点</p>
 * @method integer getCreditsScale() 获取<p>资源点取整倍数</p>
 * @method void setCreditsScale(integer $CreditsScale) 设置<p>资源点取整倍数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePlatformEnvUsageResponse extends AbstractModel
{
    /**
     * @var array <p>资源用量信息</p>
     */
    public $Resources;

    /**
     * @var integer <p>资源点</p>
     */
    public $TotalCredits;

    /**
     * @var integer <p>资源点取整倍数</p>
     */
    public $CreditsScale;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Resources <p>资源用量信息</p>
     * @param integer $TotalCredits <p>资源点</p>
     * @param integer $CreditsScale <p>资源点取整倍数</p>
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
        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new PlatformResUsageItem();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("TotalCredits",$param) and $param["TotalCredits"] !== null) {
            $this->TotalCredits = $param["TotalCredits"];
        }

        if (array_key_exists("CreditsScale",$param) and $param["CreditsScale"] !== null) {
            $this->CreditsScale = $param["CreditsScale"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
