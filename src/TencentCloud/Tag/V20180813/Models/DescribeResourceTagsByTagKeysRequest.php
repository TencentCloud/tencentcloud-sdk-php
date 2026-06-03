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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceTagsByTagKeys请求参数结构体
 *
 * @method string getServiceType() 获取<p>业务类型，示例 cvm 。指资源所属业务类型，也是资源六段式中的第三段，例如qcs::ckafka:ap-shanghai:uin/123456789:ckafkaId/ckafka-o85jq584中业务类型为ckafka</p>
 * @method void setServiceType(string $ServiceType) 设置<p>业务类型，示例 cvm 。指资源所属业务类型，也是资源六段式中的第三段，例如qcs::ckafka:ap-shanghai:uin/123456789:ckafkaId/ckafka-o85jq584中业务类型为ckafka</p>
 * @method string getResourcePrefix() 获取<p>该业务类型对应的资源前缀，示例 cvm对应instance、image、volume等。也是资源六段式中的第六段，例如qcs::ckafka:ap-shanghai:uin/123456789:ckafkaId/ckafka-o85jq584中资源前缀为ckafkaId</p>
 * @method void setResourcePrefix(string $ResourcePrefix) 设置<p>该业务类型对应的资源前缀，示例 cvm对应instance、image、volume等。也是资源六段式中的第六段，例如qcs::ckafka:ap-shanghai:uin/123456789:ckafkaId/ckafka-o85jq584中资源前缀为ckafkaId</p>
 * @method string getResourceRegion() 获取<p>资源所在地域，示例：ap-guangzhou 不区分地域的资源不需要传入该字段，区分地域的资源必填</p>
 * @method void setResourceRegion(string $ResourceRegion) 设置<p>资源所在地域，示例：ap-guangzhou 不区分地域的资源不需要传入该字段，区分地域的资源必填</p>
 * @method array getResourceIds() 获取<p>资源唯一标识ID的列表，列表容量不超过20</p>
 * @method void setResourceIds(array $ResourceIds) 设置<p>资源唯一标识ID的列表，列表容量不超过20</p>
 * @method array getTagKeys() 获取<p>资源标签键列表，列表容量不超过20</p>
 * @method void setTagKeys(array $TagKeys) 设置<p>资源标签键列表，列表容量不超过20</p>
 * @method integer getLimit() 获取<p>每页大小，默认为 400</p>
 * @method void setLimit(integer $Limit) 设置<p>每页大小，默认为 400</p>
 * @method integer getOffset() 获取<p>数据偏移量，默认为 0, 必须为Limit参数的整数倍</p>
 * @method void setOffset(integer $Offset) 设置<p>数据偏移量，默认为 0, 必须为Limit参数的整数倍</p>
 */
class DescribeResourceTagsByTagKeysRequest extends AbstractModel
{
    /**
     * @var string <p>业务类型，示例 cvm 。指资源所属业务类型，也是资源六段式中的第三段，例如qcs::ckafka:ap-shanghai:uin/123456789:ckafkaId/ckafka-o85jq584中业务类型为ckafka</p>
     */
    public $ServiceType;

    /**
     * @var string <p>该业务类型对应的资源前缀，示例 cvm对应instance、image、volume等。也是资源六段式中的第六段，例如qcs::ckafka:ap-shanghai:uin/123456789:ckafkaId/ckafka-o85jq584中资源前缀为ckafkaId</p>
     */
    public $ResourcePrefix;

    /**
     * @var string <p>资源所在地域，示例：ap-guangzhou 不区分地域的资源不需要传入该字段，区分地域的资源必填</p>
     */
    public $ResourceRegion;

    /**
     * @var array <p>资源唯一标识ID的列表，列表容量不超过20</p>
     */
    public $ResourceIds;

    /**
     * @var array <p>资源标签键列表，列表容量不超过20</p>
     */
    public $TagKeys;

    /**
     * @var integer <p>每页大小，默认为 400</p>
     */
    public $Limit;

    /**
     * @var integer <p>数据偏移量，默认为 0, 必须为Limit参数的整数倍</p>
     */
    public $Offset;

    /**
     * @param string $ServiceType <p>业务类型，示例 cvm 。指资源所属业务类型，也是资源六段式中的第三段，例如qcs::ckafka:ap-shanghai:uin/123456789:ckafkaId/ckafka-o85jq584中业务类型为ckafka</p>
     * @param string $ResourcePrefix <p>该业务类型对应的资源前缀，示例 cvm对应instance、image、volume等。也是资源六段式中的第六段，例如qcs::ckafka:ap-shanghai:uin/123456789:ckafkaId/ckafka-o85jq584中资源前缀为ckafkaId</p>
     * @param string $ResourceRegion <p>资源所在地域，示例：ap-guangzhou 不区分地域的资源不需要传入该字段，区分地域的资源必填</p>
     * @param array $ResourceIds <p>资源唯一标识ID的列表，列表容量不超过20</p>
     * @param array $TagKeys <p>资源标签键列表，列表容量不超过20</p>
     * @param integer $Limit <p>每页大小，默认为 400</p>
     * @param integer $Offset <p>数据偏移量，默认为 0, 必须为Limit参数的整数倍</p>
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
