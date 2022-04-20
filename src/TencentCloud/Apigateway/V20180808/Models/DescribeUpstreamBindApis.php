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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询后端通道绑定API列表
 *
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getBindApiSet() 获取绑定的API信息
 * @method void setBindApiSet(array $BindApiSet) 设置绑定的API信息
 */
class DescribeUpstreamBindApis extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var array 绑定的API信息
     */
    public $BindApiSet;

    /**
     * @param integer $TotalCount 总数
     * @param array $BindApiSet 绑定的API信息
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("BindApiSet",$param) and $param["BindApiSet"] !== null) {
            $this->BindApiSet = [];
            foreach ($param["BindApiSet"] as $key => $value){
                $obj = new BindApiInfo();
                $obj->deserialize($value);
                array_push($this->BindApiSet, $obj);
            }
        }
    }
}
