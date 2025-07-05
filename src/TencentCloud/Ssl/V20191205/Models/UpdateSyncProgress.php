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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 更新异步任务进度
 *
 * @method string getResourceType() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUpdateSyncProgressRegions() 获取地域结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateSyncProgressRegions(array $UpdateSyncProgressRegions) 设置地域结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取异步更新进度状态：0， 待处理， 1 已处理， 3 处理中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置异步更新进度状态：0， 待处理， 1 已处理， 3 处理中
注意：此字段可能返回 null，表示取不到有效值。
 */
class UpdateSyncProgress extends AbstractModel
{
    /**
     * @var string 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var array 地域结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateSyncProgressRegions;

    /**
     * @var integer 异步更新进度状态：0， 待处理， 1 已处理， 3 处理中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $ResourceType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UpdateSyncProgressRegions 地域结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 异步更新进度状态：0， 待处理， 1 已处理， 3 处理中
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("UpdateSyncProgressRegions",$param) and $param["UpdateSyncProgressRegions"] !== null) {
            $this->UpdateSyncProgressRegions = [];
            foreach ($param["UpdateSyncProgressRegions"] as $key => $value){
                $obj = new UpdateSyncProgressRegion();
                $obj->deserialize($value);
                array_push($this->UpdateSyncProgressRegions, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
