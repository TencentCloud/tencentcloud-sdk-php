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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDsEvent请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getName() 获取事件名称
 * @method void setName(string $Name) 设置事件名称
 * @method string getTimeToLive() 获取存活时间	
 * @method void setTimeToLive(string $TimeToLive) 设置存活时间	
 * @method string getTimeUnit() 获取存活时间单位	
 * @method void setTimeUnit(string $TimeUnit) 设置存活时间单位	
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 */
class UpdateDsEventRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 事件名称
     */
    public $Name;

    /**
     * @var string 存活时间	
     */
    public $TimeToLive;

    /**
     * @var string 存活时间单位	
     */
    public $TimeUnit;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @param string $ProjectId 项目id
     * @param string $Name 事件名称
     * @param string $TimeToLive 存活时间	
     * @param string $TimeUnit 存活时间单位	
     * @param string $Description 描述
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TimeToLive",$param) and $param["TimeToLive"] !== null) {
            $this->TimeToLive = $param["TimeToLive"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
