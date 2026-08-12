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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 差异化更新配置信息
 *
 * @method array getStrParams() 获取字符串参数 Key：EnvParam
 * @method void setStrParams(array $StrParams) 设置字符串参数 Key：EnvParam
 */
class ServerBaseConfigDiff extends AbstractModel
{
    /**
     * @var array 字符串参数 Key：EnvParam
     */
    public $StrParams;

    /**
     * @param array $StrParams 字符串参数 Key：EnvParam
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
        if (array_key_exists("StrParams",$param) and $param["StrParams"] !== null) {
            $this->StrParams = [];
            foreach ($param["StrParams"] as $key => $value){
                $obj = new ObjectKV();
                $obj->deserialize($value);
                array_push($this->StrParams, $obj);
            }
        }
    }
}
