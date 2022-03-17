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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEdgeUnitCloudApi请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置边缘单元ID
 * @method string getName() 获取边缘单元名称，64字符内
 * @method void setName(string $Name) 设置边缘单元名称，64字符内
 * @method string getDescription() 获取描述，200字符内
 * @method void setDescription(string $Description) 设置描述，200字符内
 * @method boolean getOpenCloudMonitor() 获取是否开启监控
 * @method void setOpenCloudMonitor(boolean $OpenCloudMonitor) 设置是否开启监控
 */
class ModifyEdgeUnitCloudApiRequest extends AbstractModel
{
    /**
     * @var integer 边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string 边缘单元名称，64字符内
     */
    public $Name;

    /**
     * @var string 描述，200字符内
     */
    public $Description;

    /**
     * @var boolean 是否开启监控
     */
    public $OpenCloudMonitor;

    /**
     * @param integer $EdgeUnitId 边缘单元ID
     * @param string $Name 边缘单元名称，64字符内
     * @param string $Description 描述，200字符内
     * @param boolean $OpenCloudMonitor 是否开启监控
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
        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OpenCloudMonitor",$param) and $param["OpenCloudMonitor"] !== null) {
            $this->OpenCloudMonitor = $param["OpenCloudMonitor"];
        }
    }
}
