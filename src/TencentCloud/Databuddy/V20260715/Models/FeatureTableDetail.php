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
 * @method array getPrimaryKeys() 获取<p>特征表主键字段列表</p>
 * @method void setPrimaryKeys(array $PrimaryKeys) 设置<p>特征表主键字段列表</p>
 * @method string getTimestampField() 获取<p>特征表时间戳字段名称</p>
 * @method void setTimestampField(string $TimestampField) 设置<p>特征表时间戳字段名称</p>
 * @method string getSourceTableName() 获取<p>在线特征表对应的来源表名称（离线表）</p>
 * @method void setSourceTableName(string $SourceTableName) 设置<p>在线特征表对应的来源表名称（离线表）</p>
 * @method string getWorkflowId() 获取<p>在线特征表关联的工作流ID</p>
 * @method void setWorkflowId(string $WorkflowId) 设置<p>在线特征表关联的工作流ID</p>
 * @method string getOnlineTableName() 获取<p>离线特征表对应生成的在线特征表名称</p>
 * @method void setOnlineTableName(string $OnlineTableName) 设置<p>离线特征表对应生成的在线特征表名称</p>
 * @method string getOnlineTableType() 获取<p>离线特征表对应生成的在线特征表类型，取值：TENCENT_POSTGRESQL | REDIS），缺省 TENCENT_POSTGRESQL</p>
 * @method void setOnlineTableType(string $OnlineTableType) 设置<p>离线特征表对应生成的在线特征表类型，取值：TENCENT_POSTGRESQL | REDIS），缺省 TENCENT_POSTGRESQL</p>
 * @method string getConnectionId() 获取<p>离线特征表对应生成的在线特征表ConnectionId</p>
 * @method void setConnectionId(string $ConnectionId) 设置<p>离线特征表对应生成的在线特征表ConnectionId</p>
 */
class FeatureTableDetail extends AbstractModel
{
    /**
     * @var array <p>特征表主键字段列表</p>
     */
    public $PrimaryKeys;

    /**
     * @var string <p>特征表时间戳字段名称</p>
     */
    public $TimestampField;

    /**
     * @var string <p>在线特征表对应的来源表名称（离线表）</p>
     */
    public $SourceTableName;

    /**
     * @var string <p>在线特征表关联的工作流ID</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>离线特征表对应生成的在线特征表名称</p>
     */
    public $OnlineTableName;

    /**
     * @var string <p>离线特征表对应生成的在线特征表类型，取值：TENCENT_POSTGRESQL | REDIS），缺省 TENCENT_POSTGRESQL</p>
     */
    public $OnlineTableType;

    /**
     * @var string <p>离线特征表对应生成的在线特征表ConnectionId</p>
     */
    public $ConnectionId;

    /**
     * @param array $PrimaryKeys <p>特征表主键字段列表</p>
     * @param string $TimestampField <p>特征表时间戳字段名称</p>
     * @param string $SourceTableName <p>在线特征表对应的来源表名称（离线表）</p>
     * @param string $WorkflowId <p>在线特征表关联的工作流ID</p>
     * @param string $OnlineTableName <p>离线特征表对应生成的在线特征表名称</p>
     * @param string $OnlineTableType <p>离线特征表对应生成的在线特征表类型，取值：TENCENT_POSTGRESQL | REDIS），缺省 TENCENT_POSTGRESQL</p>
     * @param string $ConnectionId <p>离线特征表对应生成的在线特征表ConnectionId</p>
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

        if (array_key_exists("OnlineTableType",$param) and $param["OnlineTableType"] !== null) {
            $this->OnlineTableType = $param["OnlineTableType"];
        }

        if (array_key_exists("ConnectionId",$param) and $param["ConnectionId"] !== null) {
            $this->ConnectionId = $param["ConnectionId"];
        }
    }
}
