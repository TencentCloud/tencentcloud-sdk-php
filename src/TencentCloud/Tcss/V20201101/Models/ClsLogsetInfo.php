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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cls日志集信息
 *
 * @method string getLogsetID() 获取日志集ID
 * @method void setLogsetID(string $LogsetID) 设置日志集ID
 * @method string getLogsetName() 获取日志集名称
 * @method void setLogsetName(string $LogsetName) 设置日志集名称
 * @method array getTopicList() 获取cls主题列表
 * @method void setTopicList(array $TopicList) 设置cls主题列表
 */
class ClsLogsetInfo extends AbstractModel
{
    /**
     * @var string 日志集ID
     */
    public $LogsetID;

    /**
     * @var string 日志集名称
     */
    public $LogsetName;

    /**
     * @var array cls主题列表
     */
    public $TopicList;

    /**
     * @param string $LogsetID 日志集ID
     * @param string $LogsetName 日志集名称
     * @param array $TopicList cls主题列表
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
        if (array_key_exists("LogsetID",$param) and $param["LogsetID"] !== null) {
            $this->LogsetID = $param["LogsetID"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = [];
            foreach ($param["TopicList"] as $key => $value){
                $obj = new ClsTopicInfo();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }
    }
}
