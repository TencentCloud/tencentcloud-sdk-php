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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置
 *
 * @method string getName() 获取配置名称
 * @method void setName(string $Name) 设置配置名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method array getRelatedApplications() 获取关联的服务列表
 * @method void setRelatedApplications(array $RelatedApplications) 设置关联的服务列表
 * @method array getData() 获取配置条目
 * @method void setData(array $Data) 设置配置条目
 */
class ConfigData extends AbstractModel
{
    /**
     * @var string 配置名称
     */
    public $Name;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var array 关联的服务列表
     */
    public $RelatedApplications;

    /**
     * @var array 配置条目
     */
    public $Data;

    /**
     * @param string $Name 配置名称
     * @param string $CreateTime 创建时间
     * @param array $RelatedApplications 关联的服务列表
     * @param array $Data 配置条目
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RelatedApplications",$param) and $param["RelatedApplications"] !== null) {
            $this->RelatedApplications = [];
            foreach ($param["RelatedApplications"] as $key => $value){
                $obj = new TemService();
                $obj->deserialize($value);
                array_push($this->RelatedApplications, $obj);
            }
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new Pair();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
