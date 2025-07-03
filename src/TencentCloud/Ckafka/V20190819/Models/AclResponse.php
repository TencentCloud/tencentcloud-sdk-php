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
 * ACL返回结果集
 *
 * @method integer getTotalCount() 获取符合条件的总数据条数
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的总数据条数
 * @method array getAclList() 获取ACL列表
 * @method void setAclList(array $AclList) 设置ACL列表
 */
class AclResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的总数据条数
     */
    public $TotalCount;

    /**
     * @var array ACL列表
     */
    public $AclList;

    /**
     * @param integer $TotalCount 符合条件的总数据条数
     * @param array $AclList ACL列表
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

        if (array_key_exists("AclList",$param) and $param["AclList"] !== null) {
            $this->AclList = [];
            foreach ($param["AclList"] as $key => $value){
                $obj = new Acl();
                $obj->deserialize($value);
                array_push($this->AclList, $obj);
            }
        }
    }
}
