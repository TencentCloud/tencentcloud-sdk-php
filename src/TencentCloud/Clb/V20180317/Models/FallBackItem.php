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
 * 路由FallBack配置
 *
 * @method array getDefaultFallBackModels() 获取<p>默认回退模型列表</p>
 * @method void setDefaultFallBackModels(array $DefaultFallBackModels) 设置<p>默认回退模型列表</p>
 */
class FallBackItem extends AbstractModel
{
    /**
     * @var array <p>默认回退模型列表</p>
     */
    public $DefaultFallBackModels;

    /**
     * @param array $DefaultFallBackModels <p>默认回退模型列表</p>
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
        if (array_key_exists("DefaultFallBackModels",$param) and $param["DefaultFallBackModels"] !== null) {
            $this->DefaultFallBackModels = $param["DefaultFallBackModels"];
        }
    }
}
