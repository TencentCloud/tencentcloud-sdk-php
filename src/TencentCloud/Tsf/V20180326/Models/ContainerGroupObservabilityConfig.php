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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可观测配置
 *
 * @method array getBusinessLogConfigIdList() 获取日志配置项ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessLogConfigIdList(array $BusinessLogConfigIdList) 设置日志配置项ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBusinessLogDeliveryConfigIdList() 获取投递配置项ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessLogDeliveryConfigIdList(array $BusinessLogDeliveryConfigIdList) 设置投递配置项ID列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerGroupObservabilityConfig extends AbstractModel
{
    /**
     * @var array 日志配置项ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessLogConfigIdList;

    /**
     * @var array 投递配置项ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessLogDeliveryConfigIdList;

    /**
     * @param array $BusinessLogConfigIdList 日志配置项ID列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BusinessLogDeliveryConfigIdList 投递配置项ID列表
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
        if (array_key_exists("BusinessLogConfigIdList",$param) and $param["BusinessLogConfigIdList"] !== null) {
            $this->BusinessLogConfigIdList = $param["BusinessLogConfigIdList"];
        }

        if (array_key_exists("BusinessLogDeliveryConfigIdList",$param) and $param["BusinessLogDeliveryConfigIdList"] !== null) {
            $this->BusinessLogDeliveryConfigIdList = $param["BusinessLogDeliveryConfigIdList"];
        }
    }
}
