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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例日志内容
 *
 * @method string getInstanceKey() 获取实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceKey(string $InstanceKey) 设置实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeContent() 获取**运行代码内容**
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeContent(string $CodeContent) 设置**运行代码内容**
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogInfo() 获取**日志内容**
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogInfo(string $LogInfo) 设置**日志内容**
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextCursor() 获取**分页查询日志时使用，无具体业务含义**

第一次查询时值为null 
第二次及以后查询时使用上一次查询返回信息中的NextCursor字段值即可
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextCursor(string $NextCursor) 设置**分页查询日志时使用，无具体业务含义**

第一次查询时值为null 
第二次及以后查询时使用上一次查询返回信息中的NextCursor字段值即可
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceLog extends AbstractModel
{
    /**
     * @var string 实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceKey;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string **运行代码内容**
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeContent;

    /**
     * @var string **日志内容**
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogInfo;

    /**
     * @var string **分页查询日志时使用，无具体业务含义**

第一次查询时值为null 
第二次及以后查询时使用上一次查询返回信息中的NextCursor字段值即可
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextCursor;

    /**
     * @param string $InstanceKey 实例唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeContent **运行代码内容**
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogInfo **日志内容**
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextCursor **分页查询日志时使用，无具体业务含义**

第一次查询时值为null 
第二次及以后查询时使用上一次查询返回信息中的NextCursor字段值即可
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CodeContent",$param) and $param["CodeContent"] !== null) {
            $this->CodeContent = $param["CodeContent"];
        }

        if (array_key_exists("LogInfo",$param) and $param["LogInfo"] !== null) {
            $this->LogInfo = $param["LogInfo"];
        }

        if (array_key_exists("NextCursor",$param) and $param["NextCursor"] !== null) {
            $this->NextCursor = $param["NextCursor"];
        }
    }
}
