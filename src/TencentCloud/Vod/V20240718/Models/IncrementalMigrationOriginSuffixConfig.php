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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 增量迁移源站文件后缀配置。
 *
 * @method string getSuffix() 获取文件后缀；如填充 `.ts` ，则回源地址为：`http(s)://<回源域名>/<文件名>.ts`。
 * @method void setSuffix(string $Suffix) 设置文件后缀；如填充 `.ts` ，则回源地址为：`http(s)://<回源域名>/<文件名>.ts`。
 */
class IncrementalMigrationOriginSuffixConfig extends AbstractModel
{
    /**
     * @var string 文件后缀；如填充 `.ts` ，则回源地址为：`http(s)://<回源域名>/<文件名>.ts`。
     */
    public $Suffix;

    /**
     * @param string $Suffix 文件后缀；如填充 `.ts` ，则回源地址为：`http(s)://<回源域名>/<文件名>.ts`。
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
        if (array_key_exists("Suffix",$param) and $param["Suffix"] !== null) {
            $this->Suffix = $param["Suffix"];
        }
    }
}
