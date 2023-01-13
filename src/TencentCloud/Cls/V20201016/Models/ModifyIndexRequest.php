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
 * ModifyIndex请求参数结构体
 *
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method boolean getStatus() 获取默认不生效
 * @method void setStatus(boolean $Status) 设置默认不生效
 * @method RuleInfo getRule() 获取索引规则
 * @method void setRule(RuleInfo $Rule) 设置索引规则
 * @method boolean getIncludeInternalFields() 获取内置保留字段（`__FILENAME__`，`__HOSTNAME__`及`__SOURCE__`）是否包含至全文索引，默认为false，推荐设置为true
* false:不包含
* true:包含
 * @method void setIncludeInternalFields(boolean $IncludeInternalFields) 设置内置保留字段（`__FILENAME__`，`__HOSTNAME__`及`__SOURCE__`）是否包含至全文索引，默认为false，推荐设置为true
* false:不包含
* true:包含
 * @method integer getMetadataFlag() 获取元数据字段（前缀为`__TAG__`的字段）是否包含至全文索引，默认为0，推荐设置为1
* 0:仅包含开启键值索引的元数据字段
* 1:包含所有元数据字段
* 2:不包含任何元数据字段
 * @method void setMetadataFlag(integer $MetadataFlag) 设置元数据字段（前缀为`__TAG__`的字段）是否包含至全文索引，默认为0，推荐设置为1
* 0:仅包含开启键值索引的元数据字段
* 1:包含所有元数据字段
* 2:不包含任何元数据字段
 */
class ModifyIndexRequest extends AbstractModel
{
    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var boolean 默认不生效
     */
    public $Status;

    /**
     * @var RuleInfo 索引规则
     */
    public $Rule;

    /**
     * @var boolean 内置保留字段（`__FILENAME__`，`__HOSTNAME__`及`__SOURCE__`）是否包含至全文索引，默认为false，推荐设置为true
* false:不包含
* true:包含
     */
    public $IncludeInternalFields;

    /**
     * @var integer 元数据字段（前缀为`__TAG__`的字段）是否包含至全文索引，默认为0，推荐设置为1
* 0:仅包含开启键值索引的元数据字段
* 1:包含所有元数据字段
* 2:不包含任何元数据字段
     */
    public $MetadataFlag;

    /**
     * @param string $TopicId 日志主题ID
     * @param boolean $Status 默认不生效
     * @param RuleInfo $Rule 索引规则
     * @param boolean $IncludeInternalFields 内置保留字段（`__FILENAME__`，`__HOSTNAME__`及`__SOURCE__`）是否包含至全文索引，默认为false，推荐设置为true
* false:不包含
* true:包含
     * @param integer $MetadataFlag 元数据字段（前缀为`__TAG__`的字段）是否包含至全文索引，默认为0，推荐设置为1
* 0:仅包含开启键值索引的元数据字段
* 1:包含所有元数据字段
* 2:不包含任何元数据字段
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

        if (array_key_exists("IncludeInternalFields",$param) and $param["IncludeInternalFields"] !== null) {
            $this->IncludeInternalFields = $param["IncludeInternalFields"];
        }

        if (array_key_exists("MetadataFlag",$param) and $param["MetadataFlag"] !== null) {
            $this->MetadataFlag = $param["MetadataFlag"];
        }
    }
}
