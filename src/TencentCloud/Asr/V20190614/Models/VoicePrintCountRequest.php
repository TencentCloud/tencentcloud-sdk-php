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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VoicePrintCount请求参数结构体
 *
 * @method string getGroupId() 获取分组ID,仅支持大小写字母和下划线的组合，不超过128个字符
 * @method void setGroupId(string $GroupId) 设置分组ID,仅支持大小写字母和下划线的组合，不超过128个字符
 * @method integer getCountMod() 获取统计模式
0: 统计所有声纹数量
1: 统计指定分组下的声纹数量
 * @method void setCountMod(integer $CountMod) 设置统计模式
0: 统计所有声纹数量
1: 统计指定分组下的声纹数量
 */
class VoicePrintCountRequest extends AbstractModel
{
    /**
     * @var string 分组ID,仅支持大小写字母和下划线的组合，不超过128个字符
     */
    public $GroupId;

    /**
     * @var integer 统计模式
0: 统计所有声纹数量
1: 统计指定分组下的声纹数量
     */
    public $CountMod;

    /**
     * @param string $GroupId 分组ID,仅支持大小写字母和下划线的组合，不超过128个字符
     * @param integer $CountMod 统计模式
0: 统计所有声纹数量
1: 统计指定分组下的声纹数量
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("CountMod",$param) and $param["CountMod"] !== null) {
            $this->CountMod = $param["CountMod"];
        }
    }
}
