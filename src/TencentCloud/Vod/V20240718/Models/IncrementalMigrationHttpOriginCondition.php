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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 增量迁移回源条件。
 *
 * @method integer getHttpStatusCode() 获取触发回源条件的 HTTP Code。若不填充，默认取值 `404`。
 * @method void setHttpStatusCode(integer $HttpStatusCode) 设置触发回源条件的 HTTP Code。若不填充，默认取值 `404`。
 * @method string getPrefix() 获取触发回源条件的对象键前缀。
 * @method void setPrefix(string $Prefix) 设置触发回源条件的对象键前缀。
 */
class IncrementalMigrationHttpOriginCondition extends AbstractModel
{
    /**
     * @var integer 触发回源条件的 HTTP Code。若不填充，默认取值 `404`。
     */
    public $HttpStatusCode;

    /**
     * @var string 触发回源条件的对象键前缀。
     */
    public $Prefix;

    /**
     * @param integer $HttpStatusCode 触发回源条件的 HTTP Code。若不填充，默认取值 `404`。
     * @param string $Prefix 触发回源条件的对象键前缀。
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
        if (array_key_exists("HttpStatusCode",$param) and $param["HttpStatusCode"] !== null) {
            $this->HttpStatusCode = $param["HttpStatusCode"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }
    }
}
