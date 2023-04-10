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
 * 操作的服务范围
 *
 * @method string getServiceName() 获取服务名，必填，如HDFS
 * @method void setServiceName(string $ServiceName) 设置服务名，必填，如HDFS
 * @method array getComponentInfoList() 获取如果没传，则表示所有进程
 * @method void setComponentInfoList(array $ComponentInfoList) 设置如果没传，则表示所有进程
 */
class ServiceBasicRestartInfo extends AbstractModel
{
    /**
     * @var string 服务名，必填，如HDFS
     */
    public $ServiceName;

    /**
     * @var array 如果没传，则表示所有进程
     */
    public $ComponentInfoList;

    /**
     * @param string $ServiceName 服务名，必填，如HDFS
     * @param array $ComponentInfoList 如果没传，则表示所有进程
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ComponentInfoList",$param) and $param["ComponentInfoList"] !== null) {
            $this->ComponentInfoList = [];
            foreach ($param["ComponentInfoList"] as $key => $value){
                $obj = new ComponentBasicRestartInfo();
                $obj->deserialize($value);
                array_push($this->ComponentInfoList, $obj);
            }
        }
    }
}
