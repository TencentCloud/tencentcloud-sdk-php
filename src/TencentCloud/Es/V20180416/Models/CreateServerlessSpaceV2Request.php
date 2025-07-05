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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServerlessSpaceV2请求参数结构体
 *
 * @method array getVpcInfo() 获取vpc信息
 * @method void setVpcInfo(array $VpcInfo) 设置vpc信息
 * @method string getSpaceName() 获取索引空间名
 * @method void setSpaceName(string $SpaceName) 设置索引空间名
 * @method string getZone() 获取空间名称
 * @method void setZone(string $Zone) 设置空间名称
 * @method array getKibanaWhiteIpList() 获取白名单列表
 * @method void setKibanaWhiteIpList(array $KibanaWhiteIpList) 设置白名单列表
 * @method integer getZoneId() 获取空间id
 * @method void setZoneId(integer $ZoneId) 设置空间id
 * @method array getTagList() 获取标签信息
 * @method void setTagList(array $TagList) 设置标签信息
 */
class CreateServerlessSpaceV2Request extends AbstractModel
{
    /**
     * @var array vpc信息
     */
    public $VpcInfo;

    /**
     * @var string 索引空间名
     */
    public $SpaceName;

    /**
     * @var string 空间名称
     */
    public $Zone;

    /**
     * @var array 白名单列表
     */
    public $KibanaWhiteIpList;

    /**
     * @var integer 空间id
     */
    public $ZoneId;

    /**
     * @var array 标签信息
     */
    public $TagList;

    /**
     * @param array $VpcInfo vpc信息
     * @param string $SpaceName 索引空间名
     * @param string $Zone 空间名称
     * @param array $KibanaWhiteIpList 白名单列表
     * @param integer $ZoneId 空间id
     * @param array $TagList 标签信息
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
        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = [];
            foreach ($param["VpcInfo"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcInfo, $obj);
            }
        }

        if (array_key_exists("SpaceName",$param) and $param["SpaceName"] !== null) {
            $this->SpaceName = $param["SpaceName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("KibanaWhiteIpList",$param) and $param["KibanaWhiteIpList"] !== null) {
            $this->KibanaWhiteIpList = $param["KibanaWhiteIpList"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
