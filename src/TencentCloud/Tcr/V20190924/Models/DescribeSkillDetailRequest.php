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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSkillDetail请求参数结构体
 *
 * @method string getRegistryId() 获取<p>TCR实例ID</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>TCR实例ID</p>
 * @method string getSkillName() 获取<p>技能名称</p>
 * @method void setSkillName(string $SkillName) 设置<p>技能名称</p>
 * @method string getSkillVersion() 获取<p>技能版本</p>
 * @method void setSkillVersion(string $SkillVersion) 设置<p>技能版本</p>
 */
class DescribeSkillDetailRequest extends AbstractModel
{
    /**
     * @var string <p>TCR实例ID</p>
     */
    public $RegistryId;

    /**
     * @var string <p>技能名称</p>
     */
    public $SkillName;

    /**
     * @var string <p>技能版本</p>
     */
    public $SkillVersion;

    /**
     * @param string $RegistryId <p>TCR实例ID</p>
     * @param string $SkillName <p>技能名称</p>
     * @param string $SkillVersion <p>技能版本</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("SkillName",$param) and $param["SkillName"] !== null) {
            $this->SkillName = $param["SkillName"];
        }

        if (array_key_exists("SkillVersion",$param) and $param["SkillVersion"] !== null) {
            $this->SkillVersion = $param["SkillVersion"];
        }
    }
}
