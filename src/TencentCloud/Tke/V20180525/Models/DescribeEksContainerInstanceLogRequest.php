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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEksContainerInstanceLog请求参数结构体
 *
 * @method string getEksCiId() 获取Eks Container Instance Id，即容器实例Id
 * @method void setEksCiId(string $EksCiId) 设置Eks Container Instance Id，即容器实例Id
 * @method string getContainerName() 获取容器名称，单容器的实例可选填。如果为多容器实例，请指定容器名称。
 * @method void setContainerName(string $ContainerName) 设置容器名称，单容器的实例可选填。如果为多容器实例，请指定容器名称。
 * @method integer getTail() 获取返回最新日志行数，默认500，最大2000。日志内容最大返回 1M 数据。
 * @method void setTail(integer $Tail) 设置返回最新日志行数，默认500，最大2000。日志内容最大返回 1M 数据。
 * @method string getStartTime() 获取UTC时间，RFC3339标准
 * @method void setStartTime(string $StartTime) 设置UTC时间，RFC3339标准
 * @method boolean getPrevious() 获取是否是查上一个容器（如果容器退出重启了）
 * @method void setPrevious(boolean $Previous) 设置是否是查上一个容器（如果容器退出重启了）
 * @method integer getSinceSeconds() 获取查询最近多少秒内的日志
 * @method void setSinceSeconds(integer $SinceSeconds) 设置查询最近多少秒内的日志
 * @method integer getLimitBytes() 获取日志总大小限制
 * @method void setLimitBytes(integer $LimitBytes) 设置日志总大小限制
 */
class DescribeEksContainerInstanceLogRequest extends AbstractModel
{
    /**
     * @var string Eks Container Instance Id，即容器实例Id
     */
    public $EksCiId;

    /**
     * @var string 容器名称，单容器的实例可选填。如果为多容器实例，请指定容器名称。
     */
    public $ContainerName;

    /**
     * @var integer 返回最新日志行数，默认500，最大2000。日志内容最大返回 1M 数据。
     */
    public $Tail;

    /**
     * @var string UTC时间，RFC3339标准
     */
    public $StartTime;

    /**
     * @var boolean 是否是查上一个容器（如果容器退出重启了）
     */
    public $Previous;

    /**
     * @var integer 查询最近多少秒内的日志
     */
    public $SinceSeconds;

    /**
     * @var integer 日志总大小限制
     */
    public $LimitBytes;

    /**
     * @param string $EksCiId Eks Container Instance Id，即容器实例Id
     * @param string $ContainerName 容器名称，单容器的实例可选填。如果为多容器实例，请指定容器名称。
     * @param integer $Tail 返回最新日志行数，默认500，最大2000。日志内容最大返回 1M 数据。
     * @param string $StartTime UTC时间，RFC3339标准
     * @param boolean $Previous 是否是查上一个容器（如果容器退出重启了）
     * @param integer $SinceSeconds 查询最近多少秒内的日志
     * @param integer $LimitBytes 日志总大小限制
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
        if (array_key_exists("EksCiId",$param) and $param["EksCiId"] !== null) {
            $this->EksCiId = $param["EksCiId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("Tail",$param) and $param["Tail"] !== null) {
            $this->Tail = $param["Tail"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Previous",$param) and $param["Previous"] !== null) {
            $this->Previous = $param["Previous"];
        }

        if (array_key_exists("SinceSeconds",$param) and $param["SinceSeconds"] !== null) {
            $this->SinceSeconds = $param["SinceSeconds"];
        }

        if (array_key_exists("LimitBytes",$param) and $param["LimitBytes"] !== null) {
            $this->LimitBytes = $param["LimitBytes"];
        }
    }
}
