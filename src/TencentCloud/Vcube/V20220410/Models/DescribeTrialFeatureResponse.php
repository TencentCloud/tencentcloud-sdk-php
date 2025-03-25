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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrialFeature返回参数结构体
 *
 * @method array getFeatureList() 获取功能列表
 * @method void setFeatureList(array $FeatureList) 设置功能列表
 * @method XMagicTrial getXMagicTrial() 获取可以开通的优图测试功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setXMagicTrial(XMagicTrial $XMagicTrial) 设置可以开通的优图测试功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getXMagicTrialList() 获取可以开通的优图测试功能列表
 * @method void setXMagicTrialList(array $XMagicTrialList) 设置可以开通的优图测试功能列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTrialFeatureResponse extends AbstractModel
{
    /**
     * @var array 功能列表
     */
    public $FeatureList;

    /**
     * @var XMagicTrial 可以开通的优图测试功能
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $XMagicTrial;

    /**
     * @var array 可以开通的优图测试功能列表
     */
    public $XMagicTrialList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FeatureList 功能列表
     * @param XMagicTrial $XMagicTrial 可以开通的优图测试功能
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $XMagicTrialList 可以开通的优图测试功能列表
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
        if (array_key_exists("FeatureList",$param) and $param["FeatureList"] !== null) {
            $this->FeatureList = [];
            foreach ($param["FeatureList"] as $key => $value){
                $obj = new Feature();
                $obj->deserialize($value);
                array_push($this->FeatureList, $obj);
            }
        }

        if (array_key_exists("XMagicTrial",$param) and $param["XMagicTrial"] !== null) {
            $this->XMagicTrial = new XMagicTrial();
            $this->XMagicTrial->deserialize($param["XMagicTrial"]);
        }

        if (array_key_exists("XMagicTrialList",$param) and $param["XMagicTrialList"] !== null) {
            $this->XMagicTrialList = [];
            foreach ($param["XMagicTrialList"] as $key => $value){
                $obj = new XMagicTrial();
                $obj->deserialize($value);
                array_push($this->XMagicTrialList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
