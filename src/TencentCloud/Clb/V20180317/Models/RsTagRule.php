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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改节点标签的数据类型
 *
 * @method string getListenerId() 获取<p>负载均衡监听器 ID。</p>
 * @method void setListenerId(string $ListenerId) 设置<p>负载均衡监听器 ID。</p>
 * @method array getTargets() 获取<p>要修改标签的后端机器列表。</p>
 * @method void setTargets(array $Targets) 设置<p>要修改标签的后端机器列表。</p>
 * @method string getLocationId() 获取<p>转发规则的ID，七层规则时需要此参数，4层规则不需要。</p>
 * @method void setLocationId(string $LocationId) 设置<p>转发规则的ID，七层规则时需要此参数，4层规则不需要。</p>
 * @method string getTag() 获取<p>后端服务修改后的标签。此参数的优先级低于前述<a href="https://cloud.tencent.com/document/api/214/30694#Target">Target</a>中的Tag参数，即最终的标签以Target中的Tag参数值为准，仅当Target中的Tag参数为空时，才以RsTagRule中的Tag参数为准。</p>
 * @method void setTag(string $Tag) 设置<p>后端服务修改后的标签。此参数的优先级低于前述<a href="https://cloud.tencent.com/document/api/214/30694#Target">Target</a>中的Tag参数，即最终的标签以Target中的Tag参数值为准，仅当Target中的Tag参数为空时，才以RsTagRule中的Tag参数为准。</p>
 */
class RsTagRule extends AbstractModel
{
    /**
     * @var string <p>负载均衡监听器 ID。</p>
     */
    public $ListenerId;

    /**
     * @var array <p>要修改标签的后端机器列表。</p>
     */
    public $Targets;

    /**
     * @var string <p>转发规则的ID，七层规则时需要此参数，4层规则不需要。</p>
     */
    public $LocationId;

    /**
     * @var string <p>后端服务修改后的标签。此参数的优先级低于前述<a href="https://cloud.tencent.com/document/api/214/30694#Target">Target</a>中的Tag参数，即最终的标签以Target中的Tag参数值为准，仅当Target中的Tag参数为空时，才以RsTagRule中的Tag参数为准。</p>
     */
    public $Tag;

    /**
     * @param string $ListenerId <p>负载均衡监听器 ID。</p>
     * @param array $Targets <p>要修改标签的后端机器列表。</p>
     * @param string $LocationId <p>转发规则的ID，七层规则时需要此参数，4层规则不需要。</p>
     * @param string $Tag <p>后端服务修改后的标签。此参数的优先级低于前述<a href="https://cloud.tencent.com/document/api/214/30694#Target">Target</a>中的Tag参数，即最终的标签以Target中的Tag参数值为准，仅当Target中的Tag参数为空时，才以RsTagRule中的Tag参数为准。</p>
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Target();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
