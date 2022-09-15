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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIndex返回参数结构体
 *
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method boolean getStatus() 获取是否生效
 * @method void setStatus(boolean $Status) 设置是否生效
 * @method RuleInfo getRule() 获取索引配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRule(RuleInfo $Rule) 设置索引配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取索引修改时间，初始值为索引创建时间。
 * @method void setModifyTime(string $ModifyTime) 设置索引修改时间，初始值为索引创建时间。
 * @method boolean getIncludeInternalFields() 获取全文索引系统预置字段标记，默认false。  false:不包含系统预置字段， true:包含系统预置字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeInternalFields(boolean $IncludeInternalFields) 设置全文索引系统预置字段标记，默认false。  false:不包含系统预置字段， true:包含系统预置字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMetadataFlag() 获取元数据相关标志位，默认为0。 0：全文索引包括开启键值索引的元数据字段， 1：全文索引包括所有元数据字段，2：全文索引不包括元数据字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadataFlag(integer $MetadataFlag) 设置元数据相关标志位，默认为0。 0：全文索引包括开启键值索引的元数据字段， 1：全文索引包括所有元数据字段，2：全文索引不包括元数据字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIndexResponse extends AbstractModel
{
    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var boolean 是否生效
     */
    public $Status;

    /**
     * @var RuleInfo 索引配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rule;

    /**
     * @var string 索引修改时间，初始值为索引创建时间。
     */
    public $ModifyTime;

    /**
     * @var boolean 全文索引系统预置字段标记，默认false。  false:不包含系统预置字段， true:包含系统预置字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeInternalFields;

    /**
     * @var integer 元数据相关标志位，默认为0。 0：全文索引包括开启键值索引的元数据字段， 1：全文索引包括所有元数据字段，2：全文索引不包括元数据字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetadataFlag;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TopicId 日志主题ID
     * @param boolean $Status 是否生效
     * @param RuleInfo $Rule 索引配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 索引修改时间，初始值为索引创建时间。
     * @param boolean $IncludeInternalFields 全文索引系统预置字段标记，默认false。  false:不包含系统预置字段， true:包含系统预置字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MetadataFlag 元数据相关标志位，默认为0。 0：全文索引包括开启键值索引的元数据字段， 1：全文索引包括所有元数据字段，2：全文索引不包括元数据字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new RuleInfo();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IncludeInternalFields",$param) and $param["IncludeInternalFields"] !== null) {
            $this->IncludeInternalFields = $param["IncludeInternalFields"];
        }

        if (array_key_exists("MetadataFlag",$param) and $param["MetadataFlag"] !== null) {
            $this->MetadataFlag = $param["MetadataFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
