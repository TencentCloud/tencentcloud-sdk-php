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
 * VoicePrintDelete请求参数结构体
 *
 * @method string getVoicePrintId() 获取说话人id，说话人唯一标识
 * @method void setVoicePrintId(string $VoicePrintId) 设置说话人id，说话人唯一标识
 * @method string getGroupId() 获取说话人分组ID,仅支持大小写字母和下划线的组合，不超过128个字符
 * @method void setGroupId(string $GroupId) 设置说话人分组ID,仅支持大小写字母和下划线的组合，不超过128个字符
 * @method integer getDelMod() 获取删除模式: 
0.默认值，删除该条声纹
1.从分组中删除该条声纹，声纹本身不删除
2.从声纹库中删除分组，仅删除分组信息，不会真正删除分组中的声纹
 * @method void setDelMod(integer $DelMod) 设置删除模式: 
0.默认值，删除该条声纹
1.从分组中删除该条声纹，声纹本身不删除
2.从声纹库中删除分组，仅删除分组信息，不会真正删除分组中的声纹
 */
class VoicePrintDeleteRequest extends AbstractModel
{
    /**
     * @var string 说话人id，说话人唯一标识
     */
    public $VoicePrintId;

    /**
     * @var string 说话人分组ID,仅支持大小写字母和下划线的组合，不超过128个字符
     */
    public $GroupId;

    /**
     * @var integer 删除模式: 
0.默认值，删除该条声纹
1.从分组中删除该条声纹，声纹本身不删除
2.从声纹库中删除分组，仅删除分组信息，不会真正删除分组中的声纹
     */
    public $DelMod;

    /**
     * @param string $VoicePrintId 说话人id，说话人唯一标识
     * @param string $GroupId 说话人分组ID,仅支持大小写字母和下划线的组合，不超过128个字符
     * @param integer $DelMod 删除模式: 
0.默认值，删除该条声纹
1.从分组中删除该条声纹，声纹本身不删除
2.从声纹库中删除分组，仅删除分组信息，不会真正删除分组中的声纹
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
        if (array_key_exists("VoicePrintId",$param) and $param["VoicePrintId"] !== null) {
            $this->VoicePrintId = $param["VoicePrintId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("DelMod",$param) and $param["DelMod"] !== null) {
            $this->DelMod = $param["DelMod"];
        }
    }
}
