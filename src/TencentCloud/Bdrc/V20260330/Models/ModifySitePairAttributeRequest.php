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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySitePairAttribute请求参数结构体
 *
 * @method string getSitePairId() 获取要修改属性的容灾站点id
 * @method void setSitePairId(string $SitePairId) 设置要修改属性的容灾站点id
 * @method string getSitePairName() 获取容灾站点名称
 * @method void setSitePairName(string $SitePairName) 设置容灾站点名称
 */
class ModifySitePairAttributeRequest extends AbstractModel
{
    /**
     * @var string 要修改属性的容灾站点id
     */
    public $SitePairId;

    /**
     * @var string 容灾站点名称
     */
    public $SitePairName;

    /**
     * @param string $SitePairId 要修改属性的容灾站点id
     * @param string $SitePairName 容灾站点名称
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
        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }

        if (array_key_exists("SitePairName",$param) and $param["SitePairName"] !== null) {
            $this->SitePairName = $param["SitePairName"];
        }
    }
}
