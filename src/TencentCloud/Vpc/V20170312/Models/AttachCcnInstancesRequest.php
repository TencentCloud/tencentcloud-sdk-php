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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachCcnInstances请求参数结构体
 *
 * @method string getCcnId() 获取CCN实例ID。形如：ccn-f49l6u0z。
 * @method void setCcnId(string $CcnId) 设置CCN实例ID。形如：ccn-f49l6u0z。
 * @method array getInstances() 获取关联网络实例列表
 * @method void setInstances(array $Instances) 设置关联网络实例列表
 * @method string getCcnUin() 获取CCN所属UIN（根账号），默认当前账号所属UIN
 * @method void setCcnUin(string $CcnUin) 设置CCN所属UIN（根账号），默认当前账号所属UIN
 */
class AttachCcnInstancesRequest extends AbstractModel
{
    /**
     * @var string CCN实例ID。形如：ccn-f49l6u0z。
     */
    public $CcnId;

    /**
     * @var array 关联网络实例列表
     */
    public $Instances;

    /**
     * @var string CCN所属UIN（根账号），默认当前账号所属UIN
     */
    public $CcnUin;

    /**
     * @param string $CcnId CCN实例ID。形如：ccn-f49l6u0z。
     * @param array $Instances 关联网络实例列表
     * @param string $CcnUin CCN所属UIN（根账号），默认当前账号所属UIN
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new CcnInstance();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("CcnUin",$param) and $param["CcnUin"] !== null) {
            $this->CcnUin = $param["CcnUin"];
        }
    }
}
