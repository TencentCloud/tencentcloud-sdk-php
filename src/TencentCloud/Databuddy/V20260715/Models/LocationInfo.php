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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存储位置详情
 *
 * @method string getLocationName() 获取存储位置名
 * @method void setLocationName(string $LocationName) 设置存储位置名
 * @method string getLocationUri() 获取存储位置URI
 * @method void setLocationUri(string $LocationUri) 设置存储位置URI
 * @method string getComment() 获取存储位置描述
 * @method void setComment(string $Comment) 设置存储位置描述
 * @method array getProperties() 获取存储位置属性
 * @method void setProperties(array $Properties) 设置存储位置属性
 * @method Audit getAudit() 获取审计信息
 * @method void setAudit(Audit $Audit) 设置审计信息
 */
class LocationInfo extends AbstractModel
{
    /**
     * @var string 存储位置名
     */
    public $LocationName;

    /**
     * @var string 存储位置URI
     */
    public $LocationUri;

    /**
     * @var string 存储位置描述
     */
    public $Comment;

    /**
     * @var array 存储位置属性
     */
    public $Properties;

    /**
     * @var Audit 审计信息
     */
    public $Audit;

    /**
     * @param string $LocationName 存储位置名
     * @param string $LocationUri 存储位置URI
     * @param string $Comment 存储位置描述
     * @param array $Properties 存储位置属性
     * @param Audit $Audit 审计信息
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
        if (array_key_exists("LocationName",$param) and $param["LocationName"] !== null) {
            $this->LocationName = $param["LocationName"];
        }

        if (array_key_exists("LocationUri",$param) and $param["LocationUri"] !== null) {
            $this->LocationUri = $param["LocationUri"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Audit",$param) and $param["Audit"] !== null) {
            $this->Audit = new Audit();
            $this->Audit->deserialize($param["Audit"]);
        }
    }
}
