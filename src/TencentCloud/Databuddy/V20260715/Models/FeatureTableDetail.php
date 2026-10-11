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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * catalog特征表详情
 *
 * @method array getPrimaryKeys() 获取特征表主键字段列表
 * @method void setPrimaryKeys(array $PrimaryKeys) 设置特征表主键字段列表
 * @method string getTimestampField() 获取特征表时间戳字段名称
 * @method void setTimestampField(string $TimestampField) 设置特征表时间戳字段名称
 * @method string getSourceTableName() 获取在线特征表对应的来源表名称（离线表）
 * @method void setSourceTableName(string $SourceTableName) 设置在线特征表对应的来源表名称（离线表）
 * @method string getWorkflowId() 获取在线特征表关联的工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置在线特征表关联的工作流ID
 * @method string getOnlineTableName() 获取离线特征表对应生成的在线特征表名称
 * @method void setOnlineTableName(string $OnlineTableName) 设置离线特征表对应生成的在线特征表名称
 */
class FeatureTableDetail extends AbstractModel
{
    /**
     * @var array 特征表主键字段列表
     */
    public $PrimaryKeys;

    /**
     * @var string 特征表时间戳字段名称
     */
    public $TimestampField;

    /**
     * @var string 在线特征表对应的来源表名称（离线表）
     */
    public $SourceTableName;

    /**
     * @var string 在线特征表关联的工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 离线特征表对应生成的在线特征表名称
     */
    public $OnlineTableName;

    /**
     * @param array $PrimaryKeys 特征表主键字段列表
     * @param string $TimestampField 特征表时间戳字段名称
     * @param string $SourceTableName 在线特征表对应的来源表名称（离线表）
     * @param string $WorkflowId 在线特征表关联的工作流ID
     * @param string $OnlineTableName 离线特征表对应生成的在线特征表名称
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
        if (array_key_exists("PrimaryKeys",$param) and $param["PrimaryKeys"] !== null) {
            $this->PrimaryKeys = $param["PrimaryKeys"];
        }

        if (array_key_exists("TimestampField",$param) and $param["TimestampField"] !== null) {
            $this->TimestampField = $param["TimestampField"];
        }

        if (array_key_exists("SourceTableName",$param) and $param["SourceTableName"] !== null) {
            $this->SourceTableName = $param["SourceTableName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("OnlineTableName",$param) and $param["OnlineTableName"] !== null) {
            $this->OnlineTableName = $param["OnlineTableName"];
        }
    }
}
