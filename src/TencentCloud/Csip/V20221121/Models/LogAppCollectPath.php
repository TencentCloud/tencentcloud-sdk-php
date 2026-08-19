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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用日志采集路径
 *
 * @method integer getId() 获取<p>配置ID</p>
 * @method void setId(integer $Id) 设置<p>配置ID</p>
 * @method string getPath() 获取<p>采集路径</p>
 * @method void setPath(string $Path) 设置<p>采集路径</p>
 * @method string getLogTag() 获取<p>日志标签</p>
 * @method void setLogTag(string $LogTag) 设置<p>日志标签</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 */
class LogAppCollectPath extends AbstractModel
{
    /**
     * @var integer <p>配置ID</p>
     */
    public $Id;

    /**
     * @var string <p>采集路径</p>
     */
    public $Path;

    /**
     * @var string <p>日志标签</p>
     */
    public $LogTag;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @param integer $Id <p>配置ID</p>
     * @param string $Path <p>采集路径</p>
     * @param string $LogTag <p>日志标签</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>修改时间</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("LogTag",$param) and $param["LogTag"] !== null) {
            $this->LogTag = $param["LogTag"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
