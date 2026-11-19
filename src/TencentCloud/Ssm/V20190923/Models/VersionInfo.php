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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 凭据版本号列表信息
 *
 * @method string getVersionId() 获取<p>版本号</p>
 * @method void setVersionId(string $VersionId) 设置<p>版本号</p>
 * @method integer getCreateTime() 获取<p>创建时间，unix时间戳。</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间，unix时间戳。</p>
 * @method array getVersionStages() 获取<p>该版本持有的公开版本标签列表，用于查看标签指向。</p><p>自定义、云产品及 Redis/MongoDB 凭据在版本列表中返回此字段，仅包含 Stage_Current；无标签时返回空数组 []。</p>
 * @method void setVersionStages(array $VersionStages) 设置<p>该版本持有的公开版本标签列表，用于查看标签指向。</p><p>自定义、云产品及 Redis/MongoDB 凭据在版本列表中返回此字段，仅包含 Stage_Current；无标签时返回空数组 []。</p>
 */
class VersionInfo extends AbstractModel
{
    /**
     * @var string <p>版本号</p>
     */
    public $VersionId;

    /**
     * @var integer <p>创建时间，unix时间戳。</p>
     */
    public $CreateTime;

    /**
     * @var array <p>该版本持有的公开版本标签列表，用于查看标签指向。</p><p>自定义、云产品及 Redis/MongoDB 凭据在版本列表中返回此字段，仅包含 Stage_Current；无标签时返回空数组 []。</p>
     */
    public $VersionStages;

    /**
     * @param string $VersionId <p>版本号</p>
     * @param integer $CreateTime <p>创建时间，unix时间戳。</p>
     * @param array $VersionStages <p>该版本持有的公开版本标签列表，用于查看标签指向。</p><p>自定义、云产品及 Redis/MongoDB 凭据在版本列表中返回此字段，仅包含 Stage_Current；无标签时返回空数组 []。</p>
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("VersionStages",$param) and $param["VersionStages"] !== null) {
            $this->VersionStages = $param["VersionStages"];
        }
    }
}
