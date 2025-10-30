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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddCalcEnginesToProject请求参数结构体
 *
 * @method string getProjectId() 获取修改的项目ID
 * @method void setProjectId(string $ProjectId) 设置修改的项目ID
 * @method array getDLCInfo() 获取DLC集群信息
 * @method void setDLCInfo(array $DLCInfo) 设置DLC集群信息
 */
class AddCalcEnginesToProjectRequest extends AbstractModel
{
    /**
     * @var string 修改的项目ID
     */
    public $ProjectId;

    /**
     * @var array DLC集群信息
     */
    public $DLCInfo;

    /**
     * @param string $ProjectId 修改的项目ID
     * @param array $DLCInfo DLC集群信息
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

        if (array_key_exists("DLCInfo",$param) and $param["DLCInfo"] !== null) {
            $this->DLCInfo = [];
            foreach ($param["DLCInfo"] as $key => $value){
                $obj = new DLCClusterInfo();
                $obj->deserialize($value);
                array_push($this->DLCInfo, $obj);
            }
        }
    }
}
