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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 共用组件信息
 *
 * @method string getShareType() 获取共用组件类型，EMR/CUSTOM
 * @method void setShareType(string $ShareType) 设置共用组件类型，EMR/CUSTOM
 * @method array getCustomServiceDefineList() 获取自定义参数集合
 * @method void setCustomServiceDefineList(array $CustomServiceDefineList) 设置自定义参数集合
 * @method string getService() 获取共用组件名
 * @method void setService(string $Service) 设置共用组件名
 * @method string getInstanceId() 获取共用组件集群
 * @method void setInstanceId(string $InstanceId) 设置共用组件集群
 */
class ExternalService extends AbstractModel
{
    /**
     * @var string 共用组件类型，EMR/CUSTOM
     */
    public $ShareType;

    /**
     * @var array 自定义参数集合
     */
    public $CustomServiceDefineList;

    /**
     * @var string 共用组件名
     */
    public $Service;

    /**
     * @var string 共用组件集群
     */
    public $InstanceId;

    /**
     * @param string $ShareType 共用组件类型，EMR/CUSTOM
     * @param array $CustomServiceDefineList 自定义参数集合
     * @param string $Service 共用组件名
     * @param string $InstanceId 共用组件集群
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
        if (array_key_exists("ShareType",$param) and $param["ShareType"] !== null) {
            $this->ShareType = $param["ShareType"];
        }

        if (array_key_exists("CustomServiceDefineList",$param) and $param["CustomServiceDefineList"] !== null) {
            $this->CustomServiceDefineList = [];
            foreach ($param["CustomServiceDefineList"] as $key => $value){
                $obj = new CustomServiceDefine();
                $obj->deserialize($value);
                array_push($this->CustomServiceDefineList, $obj);
            }
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
