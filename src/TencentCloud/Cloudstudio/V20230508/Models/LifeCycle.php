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
namespace TencentCloud\Cloudstudio\V20230508\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作空间生命周期自动执行脚本
 *
 * @method array getInit() 获取工作空间首次初始化时执行
 * @method void setInit(array $Init) 设置工作空间首次初始化时执行
 * @method array getStart() 获取每次工作空间启动时执行
 * @method void setStart(array $Start) 设置每次工作空间启动时执行
 * @method array getDestroy() 获取每次工作空间关闭时执行
 * @method void setDestroy(array $Destroy) 设置每次工作空间关闭时执行
 */
class LifeCycle extends AbstractModel
{
    /**
     * @var array 工作空间首次初始化时执行
     */
    public $Init;

    /**
     * @var array 每次工作空间启动时执行
     */
    public $Start;

    /**
     * @var array 每次工作空间关闭时执行
     */
    public $Destroy;

    /**
     * @param array $Init 工作空间首次初始化时执行
     * @param array $Start 每次工作空间启动时执行
     * @param array $Destroy 每次工作空间关闭时执行
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
        if (array_key_exists("Init",$param) and $param["Init"] !== null) {
            $this->Init = [];
            foreach ($param["Init"] as $key => $value){
                $obj = new LifeCycleCommand();
                $obj->deserialize($value);
                array_push($this->Init, $obj);
            }
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = [];
            foreach ($param["Start"] as $key => $value){
                $obj = new LifeCycleCommand();
                $obj->deserialize($value);
                array_push($this->Start, $obj);
            }
        }

        if (array_key_exists("Destroy",$param) and $param["Destroy"] !== null) {
            $this->Destroy = [];
            foreach ($param["Destroy"] as $key => $value){
                $obj = new LifeCycleCommand();
                $obj->deserialize($value);
                array_push($this->Destroy, $obj);
            }
        }
    }
}
