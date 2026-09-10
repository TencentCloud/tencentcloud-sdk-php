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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mcp tool版本信息
 *
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getCreator() 获取<p>创建者</p>
 * @method void setCreator(string $Creator) 设置<p>创建者</p>
 * @method boolean getIsActive() 获取<p>是否生效</p>
 * @method void setIsActive(boolean $IsActive) 设置<p>是否生效</p>
 * @method integer getTotalParam() 获取<p>总参数</p>
 * @method void setTotalParam(integer $TotalParam) 设置<p>总参数</p>
 * @method string getVersion() 获取<p>版本号</p>
 * @method void setVersion(string $Version) 设置<p>版本号</p>
 */
class AIGWMCPToolVersion extends AbstractModel
{
    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>创建者</p>
     */
    public $Creator;

    /**
     * @var boolean <p>是否生效</p>
     */
    public $IsActive;

    /**
     * @var integer <p>总参数</p>
     */
    public $TotalParam;

    /**
     * @var string <p>版本号</p>
     */
    public $Version;

    /**
     * @param string $CreateTime <p>创建时间</p>
     * @param string $Creator <p>创建者</p>
     * @param boolean $IsActive <p>是否生效</p>
     * @param integer $TotalParam <p>总参数</p>
     * @param string $Version <p>版本号</p>
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("IsActive",$param) and $param["IsActive"] !== null) {
            $this->IsActive = $param["IsActive"];
        }

        if (array_key_exists("TotalParam",$param) and $param["TotalParam"] !== null) {
            $this->TotalParam = $param["TotalParam"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
