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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateContentIdentifier请求参数结构体
 *
 * @method string getDescription() 获取内容标识符的描述，长度限制不超过 20 个字符。
 * @method void setDescription(string $Description) 设置内容标识符的描述，长度限制不超过 20 个字符。
 * @method string getPlanId() 获取待绑定的目标套餐 ID，仅限企业版可用。<li>当您账号下已存在套餐时，需要先前往 [套餐管理](https://console.cloud.tencent.com/edgeone/package) 获取套餐 ID，直接将内容标识符绑定至该套餐；</li><li>若您当前没有可绑定的套餐时，请先购买企业版套餐。</li>
 * @method void setPlanId(string $PlanId) 设置待绑定的目标套餐 ID，仅限企业版可用。<li>当您账号下已存在套餐时，需要先前往 [套餐管理](https://console.cloud.tencent.com/edgeone/package) 获取套餐 ID，直接将内容标识符绑定至该套餐；</li><li>若您当前没有可绑定的套餐时，请先购买企业版套餐。</li>
 * @method array getTags() 获取标签。该参数用于对内容标识符进行分权限管控。您需要先前往 [标签控制台](https://console.cloud.tencent.com/tag/taglist) 创建标签才可以在此处传入对应的标签键和标签值。
 * @method void setTags(array $Tags) 设置标签。该参数用于对内容标识符进行分权限管控。您需要先前往 [标签控制台](https://console.cloud.tencent.com/tag/taglist) 创建标签才可以在此处传入对应的标签键和标签值。
 */
class CreateContentIdentifierRequest extends AbstractModel
{
    /**
     * @var string 内容标识符的描述，长度限制不超过 20 个字符。
     */
    public $Description;

    /**
     * @var string 待绑定的目标套餐 ID，仅限企业版可用。<li>当您账号下已存在套餐时，需要先前往 [套餐管理](https://console.cloud.tencent.com/edgeone/package) 获取套餐 ID，直接将内容标识符绑定至该套餐；</li><li>若您当前没有可绑定的套餐时，请先购买企业版套餐。</li>
     */
    public $PlanId;

    /**
     * @var array 标签。该参数用于对内容标识符进行分权限管控。您需要先前往 [标签控制台](https://console.cloud.tencent.com/tag/taglist) 创建标签才可以在此处传入对应的标签键和标签值。
     */
    public $Tags;

    /**
     * @param string $Description 内容标识符的描述，长度限制不超过 20 个字符。
     * @param string $PlanId 待绑定的目标套餐 ID，仅限企业版可用。<li>当您账号下已存在套餐时，需要先前往 [套餐管理](https://console.cloud.tencent.com/edgeone/package) 获取套餐 ID，直接将内容标识符绑定至该套餐；</li><li>若您当前没有可绑定的套餐时，请先购买企业版套餐。</li>
     * @param array $Tags 标签。该参数用于对内容标识符进行分权限管控。您需要先前往 [标签控制台](https://console.cloud.tencent.com/tag/taglist) 创建标签才可以在此处传入对应的标签键和标签值。
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
