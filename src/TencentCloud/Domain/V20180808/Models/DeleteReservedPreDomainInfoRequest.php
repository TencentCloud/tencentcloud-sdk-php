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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteReservedPreDomainInfo请求参数结构体
 *
 * @method array getResourceIdList() 获取资源ID列表
 * @method void setResourceIdList(array $ResourceIdList) 设置资源ID列表
 */
class DeleteReservedPreDomainInfoRequest extends AbstractModel
{
    /**
     * @var array 资源ID列表
     */
    public $ResourceIdList;

    /**
     * @param array $ResourceIdList 资源ID列表
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
        if (array_key_exists("ResourceIdList",$param) and $param["ResourceIdList"] !== null) {
            $this->ResourceIdList = $param["ResourceIdList"];
        }
    }
}
