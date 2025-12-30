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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCF实例详情 - 异步关联云资源数据结构
 *
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method array getInstanceList() 获取<p>SCF实例详情</p>
 * @method void setInstanceList(array $InstanceList) 设置<p>SCF实例详情</p>
 * @method string getError() 获取<p>错误信息</p>
 * @method void setError(string $Error) 设置<p>错误信息</p>
 * @method integer getTotalCount() 获取<p>地域下总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>地域下总数</p>
 */
class SCFInstanceList extends AbstractModel
{
    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var array <p>SCF实例详情</p>
     */
    public $InstanceList;

    /**
     * @var string <p>错误信息</p>
     */
    public $Error;

    /**
     * @var integer <p>地域下总数</p>
     */
    public $TotalCount;

    /**
     * @param string $Region <p>地域</p>
     * @param array $InstanceList <p>SCF实例详情</p>
     * @param string $Error <p>错误信息</p>
     * @param integer $TotalCount <p>地域下总数</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceList",$param) and $param["InstanceList"] !== null) {
            $this->InstanceList = [];
            foreach ($param["InstanceList"] as $key => $value){
                $obj = new SCFInstanceDetail();
                $obj->deserialize($value);
                array_push($this->InstanceList, $obj);
            }
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
