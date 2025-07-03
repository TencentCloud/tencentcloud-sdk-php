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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了实例的抽象位置，包括其所在的可用区，所属的项目
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getProjectId() 获取项目，默认是0
 * @method void setProjectId(integer $ProjectId) 设置项目，默认是0
 */
class SpacePlacement extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 项目，默认是0
     */
    public $ProjectId;

    /**
     * @param string $Zone 可用区
     * @param integer $ProjectId 项目，默认是0
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
