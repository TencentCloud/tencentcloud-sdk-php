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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AclRule列表接口返回结果
 *
 * @method integer getTotalCount() 获取总数据条数
 * @method void setTotalCount(integer $TotalCount) 设置总数据条数
 * @method array getAclRuleList() 获取AclRule列表
 * @method void setAclRuleList(array $AclRuleList) 设置AclRule列表
 */
class AclRuleResp extends AbstractModel
{
    /**
     * @var integer 总数据条数
     */
    public $TotalCount;

    /**
     * @var array AclRule列表
     */
    public $AclRuleList;

    /**
     * @param integer $TotalCount 总数据条数
     * @param array $AclRuleList AclRule列表
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

        if (array_key_exists("AclRuleList",$param) and $param["AclRuleList"] !== null) {
            $this->AclRuleList = [];
            foreach ($param["AclRuleList"] as $key => $value){
                $obj = new AclRule();
                $obj->deserialize($value);
                array_push($this->AclRuleList, $obj);
            }
        }
    }
}
