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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器集群Pod服务CLB设置
 *
 * @method string getCLBType() 获取CLB类型，PUBLIC_IP表示支持公网CLB和INTERNAL_IP表示支持内网CLB字段 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLBType(string $CLBType) 设置CLB类型，PUBLIC_IP表示支持公网CLB和INTERNAL_IP表示支持内网CLB字段 
注意：此字段可能返回 null，表示取不到有效值。
 * @method VPCSettings getVPCSettings() 获取Vpc和子网信息设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVPCSettings(VPCSettings $VPCSettings) 设置Vpc和子网信息设置
注意：此字段可能返回 null，表示取不到有效值。
 */
class CLBSetting extends AbstractModel
{
    /**
     * @var string CLB类型，PUBLIC_IP表示支持公网CLB和INTERNAL_IP表示支持内网CLB字段 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLBType;

    /**
     * @var VPCSettings Vpc和子网信息设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VPCSettings;

    /**
     * @param string $CLBType CLB类型，PUBLIC_IP表示支持公网CLB和INTERNAL_IP表示支持内网CLB字段 
注意：此字段可能返回 null，表示取不到有效值。
     * @param VPCSettings $VPCSettings Vpc和子网信息设置
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CLBType",$param) and $param["CLBType"] !== null) {
            $this->CLBType = $param["CLBType"];
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }
    }
}
