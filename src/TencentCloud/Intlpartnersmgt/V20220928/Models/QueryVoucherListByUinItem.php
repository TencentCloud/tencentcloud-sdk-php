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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个客户代金券数据
 *
 * @method integer getClientUin() 获取子客uin
 * @method void setClientUin(integer $ClientUin) 设置子客uin
 * @method integer getTotalCount() 获取券总数量
 * @method void setTotalCount(integer $TotalCount) 设置券总数量
 * @method array getData() 获取券详情
 * @method void setData(array $Data) 设置券详情
 */
class QueryVoucherListByUinItem extends AbstractModel
{
    /**
     * @var integer 子客uin
     */
    public $ClientUin;

    /**
     * @var integer 券总数量
     */
    public $TotalCount;

    /**
     * @var array 券详情
     */
    public $Data;

    /**
     * @param integer $ClientUin 子客uin
     * @param integer $TotalCount 券总数量
     * @param array $Data 券详情
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new QueryVoucherListByUinVoucherItem();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
