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
 * 查询后端通道返回信息
 *
 * @method integer getTotalCount() 获取查询总数
 * @method void setTotalCount(integer $TotalCount) 设置查询总数
 * @method array getUpstreamSet() 获取查询列表
 * @method void setUpstreamSet(array $UpstreamSet) 设置查询列表
 */
class DescribeUpstreamInfo extends AbstractModel
{
    /**
     * @var integer 查询总数
     */
    public $TotalCount;

    /**
     * @var array 查询列表
     */
    public $UpstreamSet;

    /**
     * @param integer $TotalCount 查询总数
     * @param array $UpstreamSet 查询列表
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

        if (array_key_exists("UpstreamSet",$param) and $param["UpstreamSet"] !== null) {
            $this->UpstreamSet = [];
            foreach ($param["UpstreamSet"] as $key => $value){
                $obj = new UpstreamInfo();
                $obj->deserialize($value);
                array_push($this->UpstreamSet, $obj);
            }
        }
    }
}
