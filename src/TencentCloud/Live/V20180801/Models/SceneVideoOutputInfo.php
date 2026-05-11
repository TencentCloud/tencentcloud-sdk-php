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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 场景化视频输出信息。
 *
 * @method string getInfo() 获取<p>输出信息。</p>
 * @method void setInfo(string $Info) 设置<p>输出信息。</p>
 * @method string getType() 获取<p>输出类型。</p>
 * @method void setType(string $Type) 设置<p>输出类型。</p>
 */
class SceneVideoOutputInfo extends AbstractModel
{
    /**
     * @var string <p>输出信息。</p>
     */
    public $Info;

    /**
     * @var string <p>输出类型。</p>
     */
    public $Type;

    /**
     * @param string $Info <p>输出信息。</p>
     * @param string $Type <p>输出类型。</p>
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
        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
