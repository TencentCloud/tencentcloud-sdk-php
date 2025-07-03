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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachResourcesTag请求参数结构体
 *
 * @method string getServiceType() 获取业务类型，示例 cvm 。资源所属业务名称（资源六段式中的第三段）
 * @method void setServiceType(string $ServiceType) 设置业务类型，示例 cvm 。资源所属业务名称（资源六段式中的第三段）
 * @method array getResourceIds() 获取资源ID数组，资源个数最多为50
 * @method void setResourceIds(array $ResourceIds) 设置资源ID数组，资源个数最多为50
 * @method string getTagKey() 获取需要绑定的标签键，取值规范参考：https://cloud.tencent.com/document/product/651/13354
 * @method void setTagKey(string $TagKey) 设置需要绑定的标签键，取值规范参考：https://cloud.tencent.com/document/product/651/13354
 * @method string getTagValue() 获取需要绑定的标签值，取值规范参考：https://cloud.tencent.com/document/product/651/13354
 * @method void setTagValue(string $TagValue) 设置需要绑定的标签值，取值规范参考：https://cloud.tencent.com/document/product/651/13354
 * @method string getResourceRegion() 获取资源所在地域，不区分地域的资源则不必填。区分地域的资源则必填，且必填时必须是参数ResourceIds.N资源所对应的地域，且如果ResourceIds.N为批量时，这些资源也必须是同一个地域的。例如示例值：ap-beijing，则参数ResourceIds.N中都应该填写该地域的资源。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域，不区分地域的资源则不必填。区分地域的资源则必填，且必填时必须是参数ResourceIds.N资源所对应的地域，且如果ResourceIds.N为批量时，这些资源也必须是同一个地域的。例如示例值：ap-beijing，则参数ResourceIds.N中都应该填写该地域的资源。
 * @method string getResourcePrefix() 获取资源前缀（资源六段式中最后一段"/"前面的部分，例如“qcs::ckafka:ap-shanghai:uin/123456789:ckafkaId/ckafka-o85jq584” 中资源前缀为ckafkaId），cos存储桶不需要传入该字段，其他云资源必填
 * @method void setResourcePrefix(string $ResourcePrefix) 设置资源前缀（资源六段式中最后一段"/"前面的部分，例如“qcs::ckafka:ap-shanghai:uin/123456789:ckafkaId/ckafka-o85jq584” 中资源前缀为ckafkaId），cos存储桶不需要传入该字段，其他云资源必填
 */
class AttachResourcesTagRequest extends AbstractModel
{
    /**
     * @var string 业务类型，示例 cvm 。资源所属业务名称（资源六段式中的第三段）
     */
    public $ServiceType;

    /**
     * @var array 资源ID数组，资源个数最多为50
     */
    public $ResourceIds;

    /**
     * @var string 需要绑定的标签键，取值规范参考：https://cloud.tencent.com/document/product/651/13354
     */
    public $TagKey;

    /**
     * @var string 需要绑定的标签值，取值规范参考：https://cloud.tencent.com/document/product/651/13354
     */
    public $TagValue;

    /**
     * @var string 资源所在地域，不区分地域的资源则不必填。区分地域的资源则必填，且必填时必须是参数ResourceIds.N资源所对应的地域，且如果ResourceIds.N为批量时，这些资源也必须是同一个地域的。例如示例值：ap-beijing，则参数ResourceIds.N中都应该填写该地域的资源。
     */
    public $ResourceRegion;

    /**
     * @var string 资源前缀（资源六段式中最后一段"/"前面的部分，例如“qcs::ckafka:ap-shanghai:uin/123456789:ckafkaId/ckafka-o85jq584” 中资源前缀为ckafkaId），cos存储桶不需要传入该字段，其他云资源必填
     */
    public $ResourcePrefix;

    /**
     * @param string $ServiceType 业务类型，示例 cvm 。资源所属业务名称（资源六段式中的第三段）
     * @param array $ResourceIds 资源ID数组，资源个数最多为50
     * @param string $TagKey 需要绑定的标签键，取值规范参考：https://cloud.tencent.com/document/product/651/13354
     * @param string $TagValue 需要绑定的标签值，取值规范参考：https://cloud.tencent.com/document/product/651/13354
     * @param string $ResourceRegion 资源所在地域，不区分地域的资源则不必填。区分地域的资源则必填，且必填时必须是参数ResourceIds.N资源所对应的地域，且如果ResourceIds.N为批量时，这些资源也必须是同一个地域的。例如示例值：ap-beijing，则参数ResourceIds.N中都应该填写该地域的资源。
     * @param string $ResourcePrefix 资源前缀（资源六段式中最后一段"/"前面的部分，例如“qcs::ckafka:ap-shanghai:uin/123456789:ckafkaId/ckafka-o85jq584” 中资源前缀为ckafkaId），cos存储桶不需要传入该字段，其他云资源必填
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

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }
    }
}
