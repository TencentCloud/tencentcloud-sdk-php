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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteProject请求参数结构体
 *
 * @method integer getId() 获取项目ID
 * @method void setId(integer $Id) 设置项目ID
 * @method string getSeed() 获取随机数
 * @method void setSeed(string $Seed) 设置随机数
 * @method integer getDefaultPanelType() 获取默认看板
 * @method void setDefaultPanelType(integer $DefaultPanelType) 设置默认看板
 */
class DeleteProjectRequest extends AbstractModel
{
    /**
     * @var integer 项目ID
     */
    public $Id;

    /**
     * @var string 随机数
     */
    public $Seed;

    /**
     * @var integer 默认看板
     */
    public $DefaultPanelType;

    /**
     * @param integer $Id 项目ID
     * @param string $Seed 随机数
     * @param integer $DefaultPanelType 默认看板
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

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("DefaultPanelType",$param) and $param["DefaultPanelType"] !== null) {
            $this->DefaultPanelType = $param["DefaultPanelType"];
        }
    }
}
