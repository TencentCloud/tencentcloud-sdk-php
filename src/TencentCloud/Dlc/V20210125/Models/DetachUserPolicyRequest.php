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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetachUserPolicy请求参数结构体
 *
 * @method string getUserId() 获取<p>用户Id，和CAM侧Uin匹配</p>
 * @method void setUserId(string $UserId) 设置<p>用户Id，和CAM侧Uin匹配</p>
 * @method array getPolicySet() 获取<p>解绑的权限集合</p>
 * @method void setPolicySet(array $PolicySet) 设置<p>解绑的权限集合</p>
 * @method string getAccountType() 获取<p>用户来源类型TencentAccount（普通腾讯云用户） / EntraAccount（微软用户）</p>
 * @method void setAccountType(string $AccountType) 设置<p>用户来源类型TencentAccount（普通腾讯云用户） / EntraAccount（微软用户）</p>
 * @method array getPolicyIds() 获取<p>要授权的策略列表</p>
 * @method void setPolicyIds(array $PolicyIds) 设置<p>要授权的策略列表</p>
 */
class DetachUserPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>用户Id，和CAM侧Uin匹配</p>
     */
    public $UserId;

    /**
     * @var array <p>解绑的权限集合</p>
     */
    public $PolicySet;

    /**
     * @var string <p>用户来源类型TencentAccount（普通腾讯云用户） / EntraAccount（微软用户）</p>
     */
    public $AccountType;

    /**
     * @var array <p>要授权的策略列表</p>
     */
    public $PolicyIds;

    /**
     * @param string $UserId <p>用户Id，和CAM侧Uin匹配</p>
     * @param array $PolicySet <p>解绑的权限集合</p>
     * @param string $AccountType <p>用户来源类型TencentAccount（普通腾讯云用户） / EntraAccount（微软用户）</p>
     * @param array $PolicyIds <p>要授权的策略列表</p>
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("PolicySet",$param) and $param["PolicySet"] !== null) {
            $this->PolicySet = [];
            foreach ($param["PolicySet"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->PolicySet, $obj);
            }
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }
    }
}
