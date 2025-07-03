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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用列表
 *
 * @method array getApplicationInfoList() 获取应用列表
 * @method void setApplicationInfoList(array $ApplicationInfoList) 设置应用列表
 * @method string getTotalCount() 获取当前查询条件命中的数据总条数
 * @method void setTotalCount(string $TotalCount) 设置当前查询条件命中的数据总条数
 */
class ApplicationList extends AbstractModel
{
    /**
     * @var array 应用列表
     */
    public $ApplicationInfoList;

    /**
     * @var string 当前查询条件命中的数据总条数
     */
    public $TotalCount;

    /**
     * @param array $ApplicationInfoList 应用列表
     * @param string $TotalCount 当前查询条件命中的数据总条数
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
        if (array_key_exists("ApplicationInfoList",$param) and $param["ApplicationInfoList"] !== null) {
            $this->ApplicationInfoList = [];
            foreach ($param["ApplicationInfoList"] as $key => $value){
                $obj = new ApplicationInfo();
                $obj->deserialize($value);
                array_push($this->ApplicationInfoList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
