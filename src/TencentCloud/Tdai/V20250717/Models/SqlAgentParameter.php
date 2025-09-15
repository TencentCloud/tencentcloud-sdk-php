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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险SQL智能体参数
 *
 * @method array getInstanceInfos() 获取数据库实例信息列表
 * @method void setInstanceInfos(array $InstanceInfos) 设置数据库实例信息列表
 * @method CodeRepo getCodeRepo() 获取代码仓库信息
 * @method void setCodeRepo(CodeRepo $CodeRepo) 设置代码仓库信息
 */
class SqlAgentParameter extends AbstractModel
{
    /**
     * @var array 数据库实例信息列表
     */
    public $InstanceInfos;

    /**
     * @var CodeRepo 代码仓库信息
     */
    public $CodeRepo;

    /**
     * @param array $InstanceInfos 数据库实例信息列表
     * @param CodeRepo $CodeRepo 代码仓库信息
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
        if (array_key_exists("InstanceInfos",$param) and $param["InstanceInfos"] !== null) {
            $this->InstanceInfos = [];
            foreach ($param["InstanceInfos"] as $key => $value){
                $obj = new InstanceInfos();
                $obj->deserialize($value);
                array_push($this->InstanceInfos, $obj);
            }
        }

        if (array_key_exists("CodeRepo",$param) and $param["CodeRepo"] !== null) {
            $this->CodeRepo = new CodeRepo();
            $this->CodeRepo->deserialize($param["CodeRepo"]);
        }
    }
}
